function Weather({ temperature }) {
  if (temperature < 15) {
    return <h1>It's cold outside</h1>;
  } else if (temperature >= 15 && temperature <= 25) {
    return <h1>It's nice outside</h1>;
  } else if (temperature > 25) {
    return <h1>It's hot outside</h1>;
  }
}

function Condition() {
  return <Weather temperature={26} />;
}

export default Condition;
