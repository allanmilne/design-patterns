### The Strategy Pattern

Defines a family of algorithms, encapsulates each one, and makes them interchangeable. Strategy lets the algorithm vary
independently of the clients that use it.

![Strategy_Pattern-UML_Class_Diagram](https://user-images.githubusercontent.com/11261091/156158878-306ed885-6a5c-4c7e-8549-dab2509e0121.png)

We’re using the Strategy Pattern to implement the various behaviours of our ducks. The Duck behaviour has been
encapsulated into its own set of classes that can be easily expanded and changed, even at runtime if needed.
