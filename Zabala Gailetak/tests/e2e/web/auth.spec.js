const { test, expect } = require('@playwright/test');

test.describe('Authentication Flow', () => {
  const loginUrl = 'http://localhost:3001/login';

  test('should show error on invalid credentials', async ({ page }) => {
    await page.goto(loginUrl);
    
    await page.fill('input[type="email"]', 'wrong@example.com');
    await page.fill('input[type="password"]', 'wrongpassword');
    await page.click('button[type="submit"]');
    
    const error = page.locator('text=Errorea saioa hastean');
    await expect(error).toBeVisible();
  });

  test('should redirect to login if not authenticated', async ({ page }) => {
    await page.goto('http://localhost:3001/employees');
    await expect(page).toHaveURL(/.*login/);
  });

  test('should login successfully with admin credentials', async ({ page }) => {
    await page.goto(loginUrl);
    
    await page.fill('input[type="email"]', 'admin@zabalagailetak.com');
    await page.fill('input[type="password"]', 'Admin123!');
    await page.click('button[type="submit"]');
    
    // Check if redirected to employees
    await expect(page).toHaveURL(/.*employees/);
    await expect(page.locator('h1')).toContainText('Zabala Gailetak - HR Portal');
  });
});

test.describe('Employee Management', () => {
  test.beforeEach(async ({ page }) => {
    // Perform login
    await page.goto('http://localhost:3001/login');
    await page.fill('input[type="email"]', 'admin@zabalagailetak.com');
    await page.fill('input[type="password"]', 'Admin123!');
    await page.click('button[type="submit"]');
  });

  test('should list employees', async ({ page }) => {
    await page.goto('http://localhost:3001/employees');
    const table = page.locator('table');
    await expect(table).toBeVisible();
  });

  test('should open create employee form', async ({ page }) => {
    await page.goto('http://localhost:3001/employees');
    await page.click('text=Gehitu Langilea');
    await expect(page).toHaveURL(/.*employees\/new/);
    await expect(page.locator('h2')).toContainText('Langile Berria');
  });
});
