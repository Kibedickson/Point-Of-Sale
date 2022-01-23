#!/bin/bash
set -e

## declare an array variable
declare -a arr=("Stock" "Sale" "Purchase" "Waste" "Expense" "Supplier" "Customer" "Quotation" "Discount" "Employee" "Payroll" "Category" "Payment")

## now loop through the above array
for i in "${arr[@]}"
do
   echo "$i"
#   php artisan make:filament-resource "$i" --generate
#   php artisan make:filament-page View"$i" --resource="$i"Resource

done