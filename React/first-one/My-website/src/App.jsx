import Condition from "./components/Condition.jsx";
import Greeting from "./components/Greeting.jsx";
import UserStatus from "./components/UserStatus.jsx";

const App = () => {
  return (
    <>
      <Condition />
      <UserStatus loggedIn={true} isAdmin={true} />
      <Greeting timeOfDay={"evening"} />
    </>
  );
};

export default App;
