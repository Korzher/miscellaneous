import Counter from "./components/Counter.jsx";
import Profile from "./components/Profile.jsx";
import ShoppingList from "./components/ShoppingList.jsx";
import TodoList from "./components/TodoList.jsx";

const App = () => {
  return (
    <>
      <Counter />
      <TodoList />
      <Profile />
      <ShoppingList />
    </>
  );
};

export default App;
