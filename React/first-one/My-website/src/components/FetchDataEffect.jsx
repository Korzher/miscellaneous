import { useEffect, useState } from "react";

function FetchDataEffect() {
  const [data, setData] = useState([]);
  useEffect(() => {
    async function getData() {
      const response = await fetch(
        "https://jsonplaceholder.typicode.com/posts"
      );
      const data = await response.json();
      if (data && data.length) setData(data);
    }

    getData();
  }, []);

  return (
    <div>
      {data.map((el) => {
        return <li key={el.id}>{el.body}</li>;
      })}
    </div>
  );
}

export default FetchDataEffect;
