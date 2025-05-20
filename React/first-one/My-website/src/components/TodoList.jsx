import { useState } from "react";

function TodoList() {
  const [inputValue, setInputValue] = useState("");
  const [toDo, setToDo] = useState([]);

  function handleChange(e) {
    setInputValue(e.target.value);
  }

  function handleClick() {
    if (inputValue.trim()) {
      setToDo([...toDo, inputValue]);
      setInputValue("");
    }
  }

  return (
    <div>
      <ul>
        {toDo.map((el) => (
          <li key={Math.random()}>{el}</li>
        ))}
      </ul>
      <input
        type="text"
        value={inputValue}
        onChange={handleChange}
        placeholder="Введите текст"
      ></input>
      <button onClick={handleClick}>Добавить задание</button>
    </div>
  );
}

export default TodoList;
