function Greeting({ timeOfDay }) {
  return <div>{timeOfDay ? <p>Good, {timeOfDay}!</p> : ""}</div>;
}

export default Greeting;
