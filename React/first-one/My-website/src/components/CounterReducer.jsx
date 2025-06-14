import { useReducer } from "react";
import React from "react";
import ReducerCounter from "./ReducerCounter";

const initialState = { count: 0 };

const reducer = (state, action) => {
  switch (action.type) {
    case "incrementByNumber":
      return { ...state, count: state.count + Number(action.payload) };
    case "increment":
      return { ...state, count: state.count + 1 };
    case "incrementBy2":
      return { ...state, count: state.count + 2 };
    case "decrement":
      return { ...state, count: state.count - 1 };
    case "decrementBy2":
      return { ...state, count: state.count - 2 };
    case "reset":
      return { ...state, count: 0 };
    default:
      return state;
  }
};

function CounterReducer() {
  const [state, dispatch] = useReducer(reducer, initialState);

  return (
    <div>
      <ReducerCounter value={state} />
      <input type="number" placeholder="0"></input>
      <button
        onClick={(e) => {
          e.preventDefault();
          const value = e.target.previousElementSibling.value;
          dispatch({ type: "incrementByNumber", payload: value });
        }}
      >
        Increase on custom value
      </button>
      <button onClick={() => dispatch({ type: "increment" })}>+1</button>
      <button onClick={() => dispatch({ type: "incrementBy2" })}>+2</button>
      <button onClick={() => dispatch({ type: "decrement" })}>-1</button>
      <button onClick={() => dispatch({ type: "decrementBy2" })}>-2</button>
      <button onClick={() => dispatch({ type: "reset" })}>Reset</button>
    </div>
  );
}

export default CounterReducer;
