function ProductInfo() {
  const product = {
    name: "Laptop",
    price: 1200,
    availability: "In Stock",
  };
  return (
    <div>
      <h1>Name : {product.name}</h1>
      <p>Price : ${product.price}</p>
      <p>Availability: {product.availability}</p>
    </div>
  );
}

export default ProductInfo;
