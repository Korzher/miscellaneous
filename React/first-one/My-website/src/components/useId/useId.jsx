import { useId } from "react";

function UniqueId() {
  const id = useId();
  return (
    <div>
      <input id={`${id}`}></input>
    </div>
  );
}

export default UniqueId;
