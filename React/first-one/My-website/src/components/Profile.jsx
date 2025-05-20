import { useState } from "react";

function Profile() {
  const [userData, setUserData] = useState({ name: "", age: "" });
  const [userInfo, setUserInfo] = useState({ name: "", age: "" });

  function handleChange(e) {
    setUserData({ ...userData, [e.target.name]: e.target.value });
  }

  function handleClick() {
    setUserInfo({
      name: userData.name,
      age: Number(userData.age),
    });
    setUserData({ name: "", age: "" });
  }

  return (
    <div>
      <input
        type="text"
        name="name"
        value={userData.name}
        placeholder="Введите имя"
        onChange={handleChange}
      />
      <input
        type="text"
        name="age"
        value={userData.age}
        placeholder="Введите возраст"
        onChange={handleChange}
      />
      <button onClick={handleClick}>Внести информацию</button>
      <h1>UserName: {userInfo.name}</h1>
      <p>UserAge: {userInfo.age}</p>
    </div>
  );
}

export default Profile;
