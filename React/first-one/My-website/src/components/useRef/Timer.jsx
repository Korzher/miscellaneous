import { useRef, useState } from "react";

function Timer() {
  const timer = useRef(null);
  const [startTime, setStartTime] = useState(null);
  const [nowTime, setNowTime] = useState(null);

  function handleStart() {
    setStartTime(Date.now());
    setNowTime(Date.now());

    clearInterval(timer.current);
    timer.current = setInterval(() => {
      setNowTime(Date.now());
    }, 10);
  }

  let timePassed = 0;
  if (startTime != null && nowTime != null) {
    timePassed = (nowTime - startTime) / 1000;
  }

  function handleStop() {
    clearInterval(timer.current);
  }

  return (
    <div>
      <p>Time passed: {timePassed} seconds</p>
      <button onClick={handleStart}>Start</button>
      <button onClick={handleStop}>Stop</button>
    </div>
  );
}

export default Timer;
