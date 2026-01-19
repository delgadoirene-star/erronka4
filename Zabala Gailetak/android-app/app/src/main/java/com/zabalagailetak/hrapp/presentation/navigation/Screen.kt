package com.zabalagailetak.hrapp.presentation.navigation

/**
 * Navigation routes for the app
 */
sealed class Screen(val route: String) {
    // Auth screens
    object Login : Screen("login")
    object MfaVerification : Screen("mfa_verification")
    
    // Main app screens
    object Dashboard : Screen("dashboard")
    object Vacations : Screen("vacations")
    object NewVacationRequest : Screen("new_vacation_request")
    object VacationDetail : Screen("vacation_detail/{requestId}") {
        fun createRoute(requestId: Int) = "vacation_detail/$requestId"
    }
    object Payslips : Screen("payslips")
    object PayslipDetail : Screen("payslip_detail/{payslipId}") {
        fun createRoute(payslipId: Int) = "payslip_detail/$payslipId"
    }
    object Documents : Screen("documents")
    object Profile : Screen("profile")
}

/**
 * Bottom navigation items
 */
sealed class BottomNavItem(
    val route: String,
    val title: String,
    val icon: String // We'll use Material Icons
) {
    object Dashboard : BottomNavItem(
        route = Screen.Dashboard.route,
        title = "Hasiera",
        icon = "home"
    )
    
    object Vacations : BottomNavItem(
        route = Screen.Vacations.route,
        title = "Oporrak",
        icon = "beach_access"
    )
    
    object Payslips : BottomNavItem(
        route = Screen.Payslips.route,
        title = "Nominak",
        icon = "receipt_long"
    )
    
    object Documents : BottomNavItem(
        route = Screen.Documents.route,
        title = "Dokumentuak",
        icon = "folder"
    )
    
    object Profile : BottomNavItem(
        route = Screen.Profile.route,
        title = "Profila",
        icon = "person"
    )
}

fun getBottomNavItems() = listOf(
    BottomNavItem.Dashboard,
    BottomNavItem.Vacations,
    BottomNavItem.Payslips,
    BottomNavItem.Documents,
    BottomNavItem.Profile
)
