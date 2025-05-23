import { useContext } from "react";
import { Data } from "./UserContext";

function UserProfile() {
  const { user } = useContext(Data);
  return (
    <div>
      <h1>User Profile</h1>
      <p>{user.name}</p>
    </div>
  );
}

export default UserProfile;
