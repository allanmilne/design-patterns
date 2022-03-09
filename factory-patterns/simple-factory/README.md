## The Simple Factory

The Simple Factory isn't actually a design pattern but more of a programming idiom and is certainly worth mentioning
here. A
[Simple Factory](https://en.wikipedia.org/wiki/Factory_%28object-oriented_programming%29) is an object used to create
other objects.

## PizzaStore Example

Here we are using a simple factory to handle the details of object creation. If new Pizza's need to be added or
non-selling Pizza's removed then refactoring only has to happen in one place; the `SimplePizzaFactory` class.

![The_Simple_Factory-UML_Class_Diagram](https://user-images.githubusercontent.com/11261091/157215753-39ccfb41-b888-422d-b9b5-91d66b3a6c12.png)


