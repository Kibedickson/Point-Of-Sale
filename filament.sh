#!/bin/bash
set -e

## declare an array variable
declare -a arr=("Stock" "Payment" "Sale" "Discount" "Purchase" "Waste" "Expense" "Supplier" "Customer" "Quotation" "Employee" "Payroll")

## now loop through the above array
for i in "${arr[@]}"
do
   echo "$i"
   php artisan make:filament-resource "$i" --generate
done