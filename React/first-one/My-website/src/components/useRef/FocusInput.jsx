import { useRef } from "react";

function FocusInput() {
  const inputElement = useRef(null);
  return (
    <div>
      <input type="text" ref={inputElement}></input>
      <button onClick={() => inputElement.current.focus()}>Focus</button>
    </div>
  );
}

export default FocusInput;
