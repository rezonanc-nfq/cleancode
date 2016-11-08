![](images/clean_coders.png)

# Function structure

---

# Todays plan

* Homework review
  * Talk about pros/cons of refactoring
  * Challenges during refactoring?
  * Questions?
  * In-depth overview of the code will be done next meeting
* Listen/Watch/Discuss about function structure
* Homework assignment
* Note
  * Next meeting will be in December

---

# Homework
## Overview

Please answer the following based on the homework:

* What are the pros/cons of refactoring?
* What challenges have you encountered during refactoring?
* Any related questions came up during refactoring?

---

# Main topic
## Function structure

---

## Function structure
### Overview

--

* **Q: Where classes tend to hide?**

--

    * Large functions

--

* **Q: How to ensure that functions do only one thing?**

--

    * Write small functions
    * Extract till drop

--

Watch video `function_structure-01-overview`

--

* **Q: What is a function signature?**

--

    * Input arguments (with type definitions)
    * Return type

--

* **Q: What kind of function signatures are better?**

--

    * The smaller - the better

--

* **Q: What kind of structured programming statements cause problems?**

--

    * Switch statements
    * If statements

--

* **Q: What else is considered harmful?**

--

    * Assignments
    * State changes
    * Side-effects

---

## Function structure
### Off-topic

Watch video `function_structure-02-fusion-the_power_of_sun`

*Watch this on your own spare time.*

---

## Function structure
### Arguments

Watch video `function_structure-03-arguments`

--

* **Q: Why a large amount of function arguments is a bad thing?**

--

    * Creates more confusion
    * Breaks typical flow
    * Causes to do double takes/double checks

--

* **Q: How many arguments one should use for a function?**

--

    * Try to keep 2 as guideline
    * Consider 3 as maximum

--

* **Q: If all the arguments are very cohesive, what can we do about that?**

--

    * Pass it as an object

--

* **Q: What about constructors?**

--

    * Should follow the same rule
    * Use setters instead
    * Apply builder pattern
    * Pass a map of options

--

* **Q: What can be used to ensure that by using setters for constructor we don't have half-configured objects?**

--

    * Test suite must ensure this

--

* **Q: Why passing a boolean argument is considered bad?**

--

    * Because this already divides a function in two sections/separate functions
    * Additional source of error and confusion

--

* **Q: What to do instead of writing functions with boolean arguments?**

--

    * Write two separate functions

--

* **Q: What people usually don't expect when they look at the arguments?**

--

    * That the arguments would be treated as outputs

--

* **Q: How output arguments are written in PHP?**

--

    * It's the passing as reference (using &)

--

* **Q: What else is bad and similar to pass argument as boolean?**

--

    * Accepting null for the argument

--

* **Q: What is defensive programming?**

--

    * Programming style which is considered a smell
    * A style which uses a lot of checks for input arguments

--

* **Q: Why is defensive programming bad?**

--

    * It's waste of time
    * It's a sign that our tests are worth nothing (no tests at all)

--

* **Q: Where defensive programming is considered useful?**

--

    * Where public API is being used

---

## Function structure
### Step down rule

Watch video `function_structure-04-the_step_down_rule`

--

* **Q: What is a scissors rule?**

--

    * Separation of public and private methods inside a class

--

* **Q: What is a step down rule?**

--

    * It's a rule which states that methods should be written as public ones at the top, private at the bottom
    * The reference to another method should always go down
    * Abstraction at the top
    * Details at the bottom

--

* **Q: Why step down rule is beneficial?**

--

    * Easier to navigate through the class
    * Easier to read the essential parts
    * Easier to skip details if necessary

--

* **Q: What about public functions?**

--

    * Two ways
        * Place all public methods at the top
        * Place next public method after the last private one (which belongs to the previous public method)

--

* **Q: Which way do you write in your personal projects/teams?**

---

## Function structure
### Switches and cases

Watch video `function_structure-05-switches_and_cases`

--

* **Q: Why using switch statements is bad?**

--

    * They are not inherited from OO principles
    * They cause the fan-out problem

--

* **Q: What can be done with switch statements?**

--

    * Invert the dependencies
    * Place switch statement where it can't do any harm

--

* **Q: What are possible safe places to keep switch statements?**

--

    * Main partition

--

* **Q: What does dependency inversion mean?**

--

    * When we have run-time dependency/flow of control and source code dependency point in the same direction we change the direction of source code dependency. This is done by using polymorphism/interface/abstract.

--

* **Q: What kind of benefits does dependency inversion bring?**

--

    * Independent deployability
    * Independent extending of code
    * No hard dependencies inside the code

--

* **Q: What is main partition of code?**

--

    * Low level details which helps to run the application
    * Code which constructs various dependencies for the application
    * Code dependencies must always point from main, not to main direction
    * It should be treated as a plugin to the application itself

--

* **Q: How the technique is called which allows one to pass dependencies?**

--

    * Dependency injection

--

* **Q: How to ensure proper usage of dependency injection?**

--

    * Carefully define and maintain partitioning of code

--

* **Q: What your application should consist of?**

--

    * Independently deployable plugins/components

--

* **Q: What plugins should know?**

--

    * They should know the core of application

--

* **Q: Does the same rule apply to core application (in regards of plugins)?**

--

    * No, the core should know nothing about the plugins

--

* **Q: Core application, plugins, source code dependencies, please elaborate?**

--

    * Source code dependencies should point from plugins towards core application, not the other way around

--

* **Q: When switch statements are harmless?**

--

    * When they point to things inside the plugin and there's no back reference from the application core

--

* **Q: What else is offered by independent deployability?**

--

    * Independent development

--

* **Q: Is the independent deployability valid in PHP?**

---

## Function structure
### Paradigms

Watch video `function_structure-06-paradigms`

--

* **Q: What are the main programming paradigms?**

--

    * Functional
    * Structured
    * Object-oriented

--

* **Q: What is functional programming paradigm?**

--

    * You can't make assignments
    * You can't do side-effects
    * Functions are primary elements

--

* **Q: What is a side-effect?**

--

    * When a function changes a variable which outlives the original function, e.g. changes an instance variable

--

* **Q: What is temporal coupling?**

--

    * Dependency to call things (methods) in certain order
    * Order of calling things (methods) matter/changes behavior

--

* **Q: Where can we typically find methods which causes side-effects?**

--

    * Get/set methods
    * open/close methods
    * new/delete (not that much relevant to PHP)

--

* **Q: Why side-effect is considered harmful?**

--

    * It may change the behaviour of function when called next time with the same arguments
    * It's a persistent source of errors
    * It requires us to know the order in which to call specific methods

--

*  **Q: What is a technique called "passing a block"?**

--

    * It helps to deal/hide the temporal coupling
    * It executes the given block/command, and applies temporal coupled methods as necessary

--

* **Q: Why it's helpful to have "passing a block" technique?**

--

    * It ensures that the system/application is in correct state
    * It ensures that temporal coupled methods are called in correct order

--

* **Q: Do we need to get rid of all side-effects?**

--

    * No

--

* **Q: Why?**

--

    * Some side-effects are necessary/useful
    * Update files
    * Update database entries
    * Generate output

--

* **Q: What is CQS?**

--

    * Command and query separation
    * Command is used to change the state of the system (cause side-effects)
    * Query is used to get/retrieve information (does not cause side-effects)

--

* **Q: CQS and return values?**

--

    * Command must not return values
    * Query must return value

--

* **Q: How should commands return errors?**

--

    * It's better to use exceptions

--

* **Q: What is tell don't ask?**

--

    * Extreme form of CQS which insists on using only commands
    * We shouldn't query other objects and make decisions based on the results

--

* **Q: What is train-wreck?**

--

    * Violation of tell don't ask
    * Long chain of query methods

--

* **Q: What law does train-wreck violate?**

--

    * The law of Demeter

--

* **Q: What is the law of Demeter?**

--

* It tells us that it's a bad idea for one method/class to know the whole structure of the system
* It defines a rule to that methods can only be called on the following objects:
  * Passed as arguments
  * created locally
  * instance variables
  * globals
* One must not call other methods on previously called method result

--

* **Q: What prevents us from writing such bad code? (violates law of Demeter)**

--

* Testable code

--

* **Q: What is structured programming?**

--

* Programming paradigm which states that all algorithms should consist of only three main elements:
  * sequence
  * condition/selection
  * iteration

--

* **Q: What is early return?**

--

    * A way to exit function call early, usually when there is an error condition, and don't violate the structured programming principles of single entry in the top and single exit at the bottom

--

* **Q: Why returns and breaks inside the loop are considered bad?**

--

    * Because it makes hard to reason about the code in a sequential manner, harder to understand for the reader

---

## Function structure
### Error handling

Watch video `function_structure-07-error_handling`

--

* **Q: When error handling is wrong?**

--

    * When it obscures/hides logic

--

* **Q: What is the best way to implement error handling?**

--

    * Use Exceptions

--

* **Q: Why?**

--

    * It provides useful inherited information
    * There is no need to pass error message explicitly to the original caller
    * It's easy to catch an error when you don't know the call-chain of methods

--

* **Q: What are scoped exceptions?**

--

    * Exceptions which are defined by the module/class itself

--

* **Q: Why it is better to throw scoped exceptions?**

--

    * Provides more details and context for the error

--

* **Q: What is checked exception?**

--

    * An exception that is validated during compile time

--

* **Q: Is checked exception valid for php?**

--

    * No. PHP doesn't have a concept of checked exceptions.

--

* **Q: Why deriving from checked exceptions is bad?**

--

    * Because it goes back up the dependency chain
    * Violates independent deployability
    * Violates open/closed principle

--

* **Q: Does an exception needs to provide a message?**

--

    * Typically, the same as with comments, it's usually redundant
    * Try to avoid unneeded messages for exceptions
    * The exception itself should reveal all the necessary information needed
    * Best comment - comment you don't have to write

--

* **Q: What kind of information is considered useful to extract from the thrown exception?**

--

    * Name
    * Context
    * Scope

---

## Function structure
### Conclusion

Watch video `function_structure-08-conclusion`

*Warning: very strange video...*

--

* Functions signature should be small
    * try to keep max 3 arguments
* Don't pass/define boolean/null as arguments
    * it tends to divide the whole function
* Don't use arguments as outputs
* Organise methods using the step-down rule

--

* Switch statements are not OO
    * They might interfere with independent deployability and development
    * Polymorphism is a better choice
    * Placed inside main/factory is considered ok
* There are 3 main programming paradigms:
    * Functional
    * Structural
    * Object oriented

--

* Temporal coupling
    * Use "passing block"
* CQS
    * Tell-don't-ask
    * Law of demeter
        * call methods only on:
            * passed arguments
            * created locally
            * instance variables
            * globals

--

* Structured programming elements
    * Sequence
    * Condition/selection
    * Iteration
* Single entry/single exit

--

* Error handling - use exceptions
* Consider to think about error handling first instead of implementation
* Use scoped/non-checked exceptions
* Null-object patterns is a better choice vs handling errors
* Null value is not an error

---

# Homework

* Watch the next episode of clean code
  * Episode 05 - Form
  * We will discuss about it during next meeting
* Improve current homework of refactoring (if necessary)
* Find what kind of dependency injection forms are there?
  * Write down an example of code for each one
* Write proof in code that violation for Law of Demeter causes the code to be untestable
  * This will be helpful for our upcoming topic of TDD

