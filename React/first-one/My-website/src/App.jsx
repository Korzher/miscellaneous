import Greeting from "./components/Dynamic-content.jsx";
import Footer from "./components/Footer.jsx";
import Header from "./components/Header.jsx";
import JSXRules from "./components/JSXRules.jsx";
import MainContent from "./components/MainContent.jsx";
import ProductInfo from "./components/ProductInfo.jsx";
import ProductList from "./components/ProductList.jsx";
import UserList from "./components/UserList.jsx";

const App = () => {
  return (
    <>
      <Header />
      <MainContent />
      <Greeting />
      <ProductInfo />
      <JSXRules />
      <UserList />
      <ProductList />
      <Footer />
    </>
  );
};

export default App;
