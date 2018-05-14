# Calculation_of_TAE
PHP code to calculate TAE

The banks and financial institutions that issue loans and mortgages are obliged to indicate both the TAN (nominal annual rate) and the APR (annual percentage rate). The TAN is the effective interest rate that is used to calculate the interest paid on the loaned principal. 
In addition, the TAN is expressed on an annual basis, while the frequency of the installments is usually different (monthly, quarterly, half-yearly, etc.), this makes the Annual Actual Rate (TAE) paid different from the Annual Nominal Rate (TAN) reported in the conditions of the financing. 

Culation of the TAE:

The formula for the calculation of the Actual Annual Rate is:

TAE=(1+TAN/n)^n - 1

For Example:

TAE=(1+0.05/12)^12 -1 =0.05116= 5.0116%

