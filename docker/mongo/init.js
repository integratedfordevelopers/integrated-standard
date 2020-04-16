db = db.getSiblingDB("integrated");
db.createUser(
    {
        user: "integrated",
        pwd: "integrated",
        roles: [ { role: "readWrite", db: "integrated" }, { role: "dbAdmin", db: "integrated" } ]
    }
);
