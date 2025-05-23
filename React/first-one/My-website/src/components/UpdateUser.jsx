import { useState, useContext } from "react";
import { Data } from "./UserContext";

function UpdateUser() {
  const { updateUser } = useContext(Data);
  const [newName, setNewName] = useState("");

  function handleSubmit(e) {
    e.preventDefault();
    if (newName.trim()) {
      updateUser(newName);
      setNewName("");
    }
  }

  return (
    <div>
      <h2>Update User Name</h2>
      <form onSubmit={handleSubmit}>
        <input
          type="text"
          value={newName}
          onChange={(e) => setNewName(e.target.value)}
          placeholder="Введите новое имя"
        />
        <button type="submit">Подтвердить</button>
      </form>
    </div>
  );
}

export default UpdateUser;
