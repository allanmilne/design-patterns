# The Factory Patterns

> Encapsulating what varies
>

When we have code that instantiates concrete classes, this can become an area of frequent change. Using Factories allows
us to encapsulate this behaviour of instantiation.

By encapsulating object creation code in one factory:

- We avoid duplication in our code and provide one place to perform maintenance
- Clients depend only upon interfaces rather than concrete classes required to instantiate objects
- We are coding to abstractions and decoupling our client code from implementations

This makes our code more flexible and extensible in the future, adhering to the “Program to interfaces, not
implementations” principle.
---

## How CHANGE impacts our use of `new`

Every time we instantiate a new object using the `new` operator we are programming to an implementation and not an
interface.

<aside>💡 When you see `new`, think “CONCRETE”</aside>

#### Tying our code to a concrete class can make it more fragile and less flexible.

By coding to an interface we can insulate ourselves from many of the changes that might happen to a system throughout
its lifespan.
For example, if our code is written to an interface, then it will work with any new classes implementing that interface
through polymorphism.
However, when we have a system that makes use of lots of *concrete* classes, over time, our code may have to be changed
as new concrete classes are introduced. This effectively breaks
the [Open-closed Principle](https://en.wikipedia.org/wiki/Open%E2%80%93closed_principle) making our design "*open* for
modification" meaning that every time we want to extend our code with new concrete types, we'd have to reopen it and
make changes to **many** parts of our codebase.

### This is where the Factory Patterns can help

- [The Simple Factory](https://github.com/allanmilne/design-patterns/tree/main/factory-patterns/simple-factory)
- [The Factory Method Pattern](https://github.com/allanmilne/design-patterns/tree/main/factory-patterns/factory-method)
- [The Abstract Factory Method](https://github.com/allanmilne/design-patterns/tree/main/factory-patterns/abstract-factory)
