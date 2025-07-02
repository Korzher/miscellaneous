import { useState } from "react";
import "../style_toggle.css";

function ToggleBackgroundColor() {
  const [backgroundColor, setBackgroundColor] = useState("white");
  const [textColor, setTextColor] = useState("black");
  const [buttonStyle, setButtonStyle] = useState("white");

  const handleClick = () => {
    setBackgroundColor(backgroundColor === "white" ? "black" : "white");
    setTextColor(textColor === "black" ? "white" : "black");
    setButtonStyle(buttonStyle === "white" ? "black" : "white");
  };

  return (
    <div style={{ backgroundColor, color: textColor }}>
      <button
        onClick={handleClick}
        style={{
          buttonStyle,
          color: textColor,
          border: `2px solid ${textColor}`,
        }}
      >
        {backgroundColor === "black"
          ? "Switch to dark mode"
          : "Switch to light mode"}
      </button>
      <section className="content">
        <h1>
          Welcome to A <br />
          React App
        </h1>
      </section>
    </div>
  );
}

export default ToggleBackgroundColor;
