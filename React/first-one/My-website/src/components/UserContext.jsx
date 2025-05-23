import { createContext, useState } from "react";

const Data = createContext();

function UserContext({ children }) {
  const [user, setUser] = useState({ name: "Korzher" });

  function updateUser(newName) {
    setUser({ name: newName });
  }

  return <Data.Provider value={{ user, updateUser }}>{children}</Data.Provider>;
}

export { UserContext, Data };
