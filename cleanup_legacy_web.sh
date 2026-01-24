#!/bin/bash
# Cleanup legacy React frontend files

WEB_DIR="Zabala Gailetak/hr-portal/web"

if [ -d "$WEB_DIR" ]; then
    echo "Legacy web directory found. Removing..."
    rm -rf "$WEB_DIR"
    echo "Directory removed."
else
    echo "Legacy web directory not found."
fi
