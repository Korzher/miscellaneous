import { useState } from "react";
import "../style_testimonials.css";

const Testimonials = () => {
  const [currentIndex, setCurrentIndex] = useState(0);
  const testimonials = [
    {
      quote: "This is the best product I've ever used",
      name: "John Doe",
    },
    {
      quote: "I love this product. It's the best thing since sliced bread",
      name: "Anthony Smith",
    },
    {
      quote: "Stayc  girls, it's going down!",
      name: "Stayc",
    },
    {
      quote:
        "Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quos. Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quos.",
      name: "Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quos. Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quos.",
    },
  ];
  const len = testimonials.length;
  return (
    <div className="testimonials">
      <div className="testimonials-quote">
        {testimonials[currentIndex].quote}
        <div className="testimonials-author">
          {testimonials[currentIndex].name}
        </div>
      </div>
      <div className="testimonials-nav">
        <button onClick={() => setCurrentIndex((currentIndex + 1) % len)}>
          Previous
        </button>
        <button onClick={() => setCurrentIndex((currentIndex + len - 1) % len)}>
          Next
        </button>
      </div>
    </div>
  );
};

export default Testimonials;
