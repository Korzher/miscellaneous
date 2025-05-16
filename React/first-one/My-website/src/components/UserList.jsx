function UserList() {
  const users = [
    { id: 1, name: "Alice", age: 25 },
    { id: 2, name: "Bob", age: 30 },
    { id: 3, name: "Charle", age: 22 },
  ];
  return (
    <div>
      <ul>
        {users.map((user) => {
          return (
            <li key={user.id}>
              <div>{user.name}</div>
              <div>{user.age}</div>
            </li>
          );
        })}
      </ul>
    </div>
  );
}

export default UserList;
