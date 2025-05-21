import { useEffect } from "react";

function BasicEffect() {
  useEffect(() => {
    console.log("You've got me!");
  }, []);
  return <></>;
}

export default BasicEffect;
