function Greeting() {
  const greet = "Hello World";
  const newDate = new Date();
  const date = newDate.getDate();
  return (
    <div>
      <h1>{greet}</h1>
      <p>Текущая дата : {date}</p>
    </div>
  );
}

export default Greeting;
