import UpdateUser from "./components/UpdateUser";
import { UserContext } from "./components/UserContext";
import UserProfile from "./components/UserProfile";

const App = () => {
  return (
    <>
      <UserContext>
        <UserProfile />
        <UpdateUser />
      </UserContext>
    </>
  );
};

export default App;
