# The Observer Pattern

The observer pattern is a behavioral pattern for communicating state to a set of objects in a loosely coupled manner.

> The Observer Pattern defines a one-to-many dependency between objects so that when one object changes state, all of its dependents are notified and updated automatically.

The subject and observers define the one-to-many relationship. We have *one* subject who notifies *many* observers when something in the subject changes. The observers are *dependant* on the subject - when the subject’s state changes the observers are notified.

- Subjects update Observers using a common interface
- Observers of any concrete type can participate in the pattern as long as they implement the Observer interface
- Observers are loosely coupled in that the Subject knows *nothing* about them, other than that they implement the Observer interface
- You can push or pull data from the Subject when using the pattern
