class Person{
    constructor(name,age){
       name=this.name;
       age=this.age;
    }

    show(){
       console.log(`你的姓名是：${this.name}`);
    }

    static log(){
        console.log("这是静态方法");
    }
}

Person.log();  //正常：静态方法可以通过类直接调用

//Person.show(); //报错：原型方法只能通过类的实例调用
var user1=new Person("张三",20);
user1.show();