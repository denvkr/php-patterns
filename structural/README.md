#Structural design patterns
This design patterns is all about Class and Object composition. Structural class-creation patterns use inheritance to
compose interfaces. Structural object-patterns define ways to compose objects to obtain new functionality.

## [How do the Proxy, Decorator, Adapter, and Bridge Patterns differ?](http://stackoverflow.com/questions/350404/how-do-the-proxy-decorator-adapter-and-bridge-patterns-differ)

Proxy, Decorator, Adapter, and Bridge are all variations on "wrapping" a class. But their uses are different.
* Proxy could be used when you want to lazy-instantiate an object, or hide the fact that you're calling a remote service, or control access to the object.
* [Decorator](decorator) is also called "Smart Proxy." This is used when you want to add functionality to an object, but not by extending that object's type. This allows you to do so at runtime.
* [Adapter](adapter) is used when you have an abstract interface, and you want to map that interface to another object which has similar functional role, but a different interface.
* [Bridge](bridge) is very similar to Adapter, but we call it Bridge when you define both the abstract interface and the underlying implementation. I.e. you're not adapting to some legacy or third-party code, you're the designer of all the code but you need to be able to swap out different implementations.
* [Facade](facade) is a higher-level (read: simpler) interface to a subsystem of one or more classes. Think of Facade as a sort of container for other objects, as opposed to simply a wrapper.
[answered Bill Karwin](http://stackoverflow.com/a/350471/2170524)