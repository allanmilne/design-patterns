# Design Patterns

Design patterns are a reusable solution to a commonly occurring problem within the context of software design.

This repo is a reference to the design patterns that I have studied as I make my way through the
book [Head First Design Patterns](https://www.oreilly.com/library/view/head-first-design/9781492077992/) written in PHP.

## Pattern Types

### Behavioral

- [The Strategy Pattern](https://github.com/allanmilne/design-patterns/blob/main/strategy-pattern/README.md)
- [The Observer Pattern](https://github.com/allanmilne/design-patterns/blob/main/observer-pattern/README.md)

### Structural

- [The Decorator Pattern](https://github.com/allanmilne/design-patterns/blob/main/decorator-pattern/README.md)

### Creational

- [The Factory Patterns](https://github.com/allanmilne/design-patterns/tree/main/factory-patterns)

---
To open this project locally and run tests

- Clone this repo
- `cd` into a design pattern directory e.g. `cd strategy-pattern`
- Install the directory dependencies
  `composer install`
- To run tests
  `./vendor/bin/phpunit tests --testdox`
