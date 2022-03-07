# The Decorator Pattern

The Decorator Pattern is a structural pattern for creating flexible designs and staying true to the Open-Closed
Principle.

> The Decorator Pattern attaches additional responsibilities to an object dynamically. Decorators provide a flexible alternative to subclassing for extending functionality.

## When to reach for the Decorator Pattern

In cases where we have existing code that we need to extend we can use the Decorator Pattern. By wrapping the components
with new behaviour we reduce the chance of introducing bugs and side effects in legacy code.

## Coffee Shop example

Using the Decorator Pattern in our Coffee Shop example we are subclassing the abstract class Beverage in order to have
the correct
_type_, **not to inherit its behaviour**. The behaviour comes in through the composition of decorators with the base
components along with any other decorators we instantiate.

![The_Decorator_Pattern-UML_Class_Diagram](https://user-images.githubusercontent.com/11261091/157060796-c3b5ea46-73bc-4fd2-8ddb-baddccaa8bc2.png)

Think of Decorator objects as wrappers

- Decorators have the same supertype as the objects they decorate
- We can use one or more decorators to wrap an object
- Given that the decorator has the same supertype as the object it decorates, we can pass around a decorated object in
  place of the original (wrapped) object
- The decorator adds its own behaviour before and/or after delegating to the object it decorates to do the rest of the
  job
- Objects can be decorated at any time, so we can decorate objects dynamically at runtime with as many decorators as we
  like
- We can wrap a component with any number of decorators

Pro’s

- Adds flexibility to designs.
- Satisfies the Open-Close Principle.

Con’s

- Can add a lot of small classes to a design making the design more difficult to understand.
- Introducing decorators can increase the complexity of the code; not only do you need to instantiate the component, but
  also wrap it with (n) number of decorators. This problem can be dealt with by using the Factory and Builder Design
  Patterns.
