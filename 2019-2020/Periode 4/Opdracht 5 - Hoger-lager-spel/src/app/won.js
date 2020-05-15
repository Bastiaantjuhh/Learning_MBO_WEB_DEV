import React from "react";

const Won = (props) => {
  return (
    <div>
        <p>Het nummer was: {props.number}</p>
        <p>Je hebt {props.result.length} pogingen gedaan</p>
    </div>
  );
}

export default Won;