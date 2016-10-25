![](images/clean_coders.png)

# Live refactor

---

# Todays plan

* Remember past session
* Live refactoring session

---

## Past session

--

## Functions
### Question

* What kind of benefits does a small function gives to us? [DB]

--

## Functions
### Double check

* Low amount of indentation
* Low amount of try/catch statements
* Easy to read code
* Understandable and small logic
* Easy to pick a name for function

--

## Functions
### Questions

* Why it’s important to organise functions? [DB]

--

## Functions
### Double check

* Because you’ll be working with a team!

--

## Functions
### Questions

* Why we were afraid/discouraged to use a lot of small functions 5-10 years ago? [DB]

--

## Functions
### Double check

* Function call overhead

--

## Functions
### Questions

* Where function call overhead is still a concern? [DB]

--

## Functions
### Double check

* In small/resource limited/embedded systems

--

## Functions
### Questions

* Why it’s important to optimise the code for reading vs focusing on writing it faster? [DB]

--

## Functions
### Double check

* Because of reading/writing ratio, the code will be read more times than it’s written.
* Because by saving yourself a little bit of time you’re wasting everyone else a lot of time.

--

## Functions
### Questions

* How do you start to refactor code? [DB]

--

## Functions
### Double check

* Write characterisation test (golden master)

--

## Functions
### Questions

* Why we need this characterisation test? [DB]

--

## Functions
### Double check

* To see if we haven’t broke our code’s original functionality

--

## Functions
### Questions

* What is a possible deterministic way to ensure that functions does only one thing and does not cross the different level of abstraction? [DB]

--

## Functions
### Double check

* Extract till you drop

--

## Functions
### Questions

* What is "Extract till you drop"? [NDB]

--

## Functions
### Questions

* What’s the worst way to test a program? [DB]

--

## Functions
### Double check

* Test it through the UI

--

## Functions
### Questions

* What’s better alternative? [DB]

--

## Functions
### Double check

* Unit/Integration tests

--

## Functions
### Questions

* Why? [DB]

--

## Functions
### Double check

* Faster execution
* Does not depend on the UI

--

## Functions
### Questions

* What’s a feature envy? [DB]

--

## Functions
### Double check

* Provide example with rectangle, getArea

--

## Functions
### Things to remember

* Small functions
* Smaller than small functions
* Smaller functions will save you and others time
* Don’t think about function call overhead
* Classes tend to hide in large functions
* Functions do one thing, do it well
* Extract till you drop

---

## Live refactoring

--

## Live refactoring
### Terms

* What is refactoring?
* What kind of refactoring methods do you know?

--

## Live refactoring
### Look at the code

* What does it do?

---

# Homework

--

## Homework assignment

* Refactor the same code which was used during today's session
  * Located in [code](code/) folder
  * Original [main.php](code/main.php)
  * [Input](code/input.txt) used for the demo
* Send your refactored code back via e-mail
  * I'll explain the reasons why during next meeting
  * Do **NOT** create forks with your refactored code!
* Try to modify the code to match new requirements (*see next slide*)
* Write down what benefits do you see working with refactored code

--

## New requirements

* Update the titles of tables to make sense
* Round the prices BEFORE the calculation
  * Convert them to marketing prices (x.99)
  * Original price should be kept only in the input file
* Insert single number at the end - total amount of price from all the products
* Change display of headers in tables to use '='
* Output the result into a file 'output.txt'
