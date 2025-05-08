import PropTypes from "prop-types";
import styled from "styled-components";

// style
const Button = styled.button`
  border-radius: 100px;
  padding: 10px 12px;
  width: 100%;
  max-width: 150px;
  height: 36px;
  box-shadow: 0 4px 15px 0 rgba(0, 74, 123, 0.2);
  background: var(--color-default);
  font-family: var(--second-family);
  font-weight: 500;
  font-size: 12px;
  line-height: 130%;
  text-align: center;
  color: var(--color-input);
  margin: 0 auto;
  display: flex;
  align-items: center;
  justify-content: center;
`;

const SmallButton = ({ children, onClick }) => {
  const handleInputChange = (event) => {
    if (onClick) {
      onClick(event);
    }
  };

  return <Button onClick={handleInputChange}>{children}</Button>;
};

SmallButton.propTypes = {
  children: PropTypes.node,
  onClick: PropTypes.func,
};

export default SmallButton;
