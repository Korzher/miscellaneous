function ProductList() {
  const products = [
    { id: 1, name: "Phone", price: "$699" },
    { id: 2, name: "Laptop", price: "$1200" },
    { id: 3, name: "Headphones", price: "$199" },
  ];

  return (
    <ul>
      {products.map((product) => {
        return (
          <li key={product.id}>
            <div>
              {product.name} - Price: {product.price}
            </div>
          </li>
        );
      })}
    </ul>
  );
}

export default ProductList;
