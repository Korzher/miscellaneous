import { useState } from "react";

function ShoppingList() {
  const [nameValue, setNameValue] = useState(null);
  const [quantityValue, setQuantityValue] = useState(null);
  const [info, setInfo] = useState([{ name: "", quantity: "" }]);

  function handleNameChange(e) {
    setNameValue(e.target.value);
  }

  function handleQuantityChange(e) {
    setQuantityValue(e.target.value);
  }

  function handleClick() {
    setInfo((prev) => [...prev, { name: nameValue, quantity: quantityValue }]);
    setNameValue("");
    setQuantityValue("");
  }

  return (
    <div>
      <input
        type="text"
        value={nameValue}
        placeholder="Введите имя"
        onChange={handleNameChange}
      />
      <input
        type="text"
        value={quantityValue}
        placeholder="Введите количество"
        onChange={handleQuantityChange}
      />
      <button onClick={handleClick}>Внести информацию</button>
      <ul>
        {info.map((el, index) =>
          el?.name && el?.quantity ? (
            <li key={index}>
              Name: {el.name}, Quantity: {el.quantity}
            </li>
          ) : null
        )}
      </ul>
    </div>
  );
}

export default ShoppingList;
