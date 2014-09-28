#Design Patterns in PHP
I collect the best example of [design patterns](https://en.wikipedia.org/wiki/Software_design_pattern) in PHP.
Every pattern have file index.php with examples and diagrams (draw in [Dia](https://wiki.gnome.org/Apps/Dia)).
I think this is better than big description.

### Creational
* [Factory Method](creational/factoryMethod) Creates an instance of several derived classes
* [Abstract Factory](creational/abstractFactory) Creates an instance of several families of classes
* [Singleton](creational/singleton) A class of which only a single instance can exist
* [Builder](creational/builder) Separates object construction from its representation
* [Prototype](creational/prototype) Creates new objects by copying this prototype
* Lazy initialization
* Multiton
* Object pool

### [Structural](structural)
* [Adapter](structural/adapter) Converts one interface to another so that it matches what the client is expecting
* [Bridge](structural/bridge) Separates an object’s interface from its implementation
* [Decorator](structural/decorator) Dynamically adds responsibility to the interface by wrapping the original code
* [Facade](structural/facade) Provides a simplified interface
* [Proxy](structural/proxy) Provide a surrogate or placeholder for another object to control access to it.
* [Composite](structural/composite) Compose objects into tree structures to represent part-whole hierarchies.
Composite lets clients treat individual objects and compositions of objects uniformly.
* [Flyweight](structural/flyweight) Use sharing to support large numbers of similar objects efficiently
* [Front Controller](structural/frontController) A controller that handles all requests
* Twin

### Behavioral
* [Interpreter](behavioral/interpreter) That specifies how to evaluate sentences in a language
* [Observer](behavioral/observer) A way of notifying change to a number of classes
* [Command](behavioral/command) Encapsulate a command request as an object
* [Iterator](behavioral/iterator) Sequentially access the elements of a collection
* [Mediator](behavioral/mediator) Defines simplified communication between classes
* [Memento](behavioral/memento) Provides the ability to restore an object to its previous state
* State
* [Chain of Responsibility](behavioral/chainOfResponsibility) A way of passing a request between a chain of objects
* [Strategy](behavioral/strategy) Encapsulates an algorithm inside a class
* Template Method
* [Visitor](behavioral/visitor) Is a way of separating an algorithm from an object structure on which it operates.
* [Null object](behavioral/nullObject) Designed to act as a default value of an object
* Specification
* Servant

###Domain Logic Patterns
* Transaction Script
* Domain Model
* Table Module
* Service Layer

###Data Source Architectural Patterns
* Table Data Gateway
* Row Data Gateway
* Active Record
* Data Mapper

###Object-Relational Behavioral Patterns
* Unit of Work
* Identity Map
* Lazy Load

###Object-Relational Structural Patterns
* Identity Field
* Foreign Key Mapping
* Association Table Mapping
* Dependent Mapping
* Embedded Value
* Serialized LOB
* Single Table Inheritance
* Class Table Inheritance
* Concrete Table Inheritance
* Inheritance Mappers

###Object-Relational Metadata Mapping Patterns
* Metadata Mapping
* Query Object
* Repository

###Web Presentation Patterns
* [Model View Controller](webPresentation/mvc) Divides a given software application into three interconnected part
* Page Controller
* [Front Controller](webPresentation/frontController) A controller that handles all requests
* Template View
* Transform View
* Two Step View
* Application Controller

###Distribution Patterns
* Remote Facade
* Data Transfer Object

###Offline Concurrency Patterns
* Optimistic Offline Lock
* Pessimistic Offline Lock
* Coarse-Grained Lock
* Implicit Lock

###Session State Patterns
* Client Session State
* Server Session State
* Database Session State

###Base Patterns
* Gateway
* Mapper
* Layer Supertype
* Separated Interface
* Registry
* Value Object
* Money
* Special Case
* Plugin
* Service Stub
* Record Set

## External links
* [DesignPatternsPHP](https://github.com/domnikl/DesignPatternsPHP#designpatternsphp) by [Dominik Liebler](https://github.com/domnikl)
* [SourceMaking](http://sourcemaking.com/design_patterns)
* [Паттерны проектирования](http://habrahabr.ru/post/84706/)
* [Design Patterns Quick Reference](http://www.mcdonaldland.info/2007/11/28/40/)

## Books
* [Design Patterns: Elements of Reusable Object-Oriented Software](http://amzn.com/0201633612)
* [Head First Design Patterns](http://amzn.com/0596007124)
* [PHP Objects, Patterns and Practice](http://amzn.com/143022925X)
* [Patterns of Enterprise Application Architecture](http://amzn.com/0321127420)