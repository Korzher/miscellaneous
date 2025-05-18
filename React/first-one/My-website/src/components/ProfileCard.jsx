function ProfileCard() {
  const styles = {
    backgroundColor: "lightgray",
    padding: "15px",
    borderRadius: "8px",
    color: "black",
  };
  return (
    <div style={styles}>
      <h1>Profile name</h1>
      <p>Extended description of a user</p>
    </div>
  );
}

export default ProfileCard;
