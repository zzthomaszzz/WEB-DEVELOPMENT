class EmailRecord {
    constructor(name, email) {
        this.name = name;
        this.email = email;
    }

    print() {
        var output = document.getElementById("output");
        output.innerHTML += "<p>" + this.name + " | " + this.email + "</p>";
    }
}

var output = document.getElementById("output");

var rec1 = new EmailRecord("Alice Smith", "alice@example.com");
var rec2 = new EmailRecord("Bob Jones", "bob@example.com");

output.innerHTML += "<h3>Two instances created with new:</h3>";
rec1.print();
rec2.print();

var jsonData = JSON.parse('{"name": "Charlie Brown", "email": "charlie@example.com"}');
output.innerHTML += "<h3>JSON object instanceof EmailRecord: " + (jsonData instanceof EmailRecord) + "</h3>";

var rec3 = new EmailRecord(jsonData.name, jsonData.email);
output.innerHTML += "<p>EmailRecord built from JSON instanceof EmailRecord: " + (rec3 instanceof EmailRecord) + "</p>";
rec3.print();

// Extra: database class
class EmailDatabase {
    constructor() {
        this.records = [];
    }

    addRecord(record) {
        this.records.push(record);
    }

    printAll() {
        var output = document.getElementById("output");
        output.innerHTML += "<h3>All database entries:</h3>";
        for (var i = 0; i < this.records.length; i++) {
            this.records[i].print();
        }
    }
}

var db = new EmailDatabase();
db.addRecord(new EmailRecord("Dave Wilson", "dave@example.com"));
db.addRecord(new EmailRecord("Eve Taylor", "eve@example.com"));
db.addRecord(new EmailRecord("Frank Moore", "frank@example.com"));
db.printAll();
