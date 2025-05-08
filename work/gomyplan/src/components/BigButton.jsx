import PropTypes from "prop-types";
import styled from "styled-components";

// style
const Button = styled.button`
  width: 100%;
  height: 60px;
  border-radius: 10px;
  background: var(--color-default);
  box-shadow: 0 0 0px 6px rgba(0, 63, 136, 0.2);
  display: flex;
  align-items: center;
  justify-content: center;
  font-family: var(--second-family);
  font-weight: 600;
  font-size: 24px;
  line-height: 130%;
  text-align: center;
  color: var(--color-input);
  transition: var(--transition);

  &:not(.pc_ver) {
    height: 40px;
    border-radius: 8px;
    box-shadow: 0 0 0px 3px rgba(0, 63, 136, 0.2);
    font-size: 16px;
  }

  &.ver2 {
    border: 2px solid var(--color-border2);
    box-shadow: inset 0 0 20px 0 rgba(66, 169, 236, 0.3);
    background: var(--color-input);
    color: var(--color-main);
  }

  &:disabled {
    background: var(--color-border);
    box-shadow: 0 0 0px 3px rgba(221, 221, 221, 0.4);
    color: var(--color-white);
  }

  @media only screen and (max-width: 600px) {
    height: 40px;
    border-radius: 8px;
    box-shadow: 0 0 0px 3px rgba(0, 63, 136, 0.2);
    font-size: 16px;
  }

  .darkMode &.ver2 {
    border: 2px solid var(--color-default);
    background: var(--color-darkgray2);
    color: var(--color-border2);
  }

  .darkMode &:disabled {
    background: var(--color-gray);
  }

  @media screen and (max-width: 320px) {
     &:not(.pc_ver) {
      font-size: 14px;
    }
  }
`;

const BigButton = ({ children, onClick, ...props }) => {
  const handleInputChange = (event) => {
    if (onClick) {
      onClick(event);
    }
  };

  return (
    <Button onClick={handleInputChange} {...props}>
      {children}
    </Button>
  );
};

BigButton.propTypes = {
  children: PropTypes.node,
  onClick: PropTypes.func,
};

export default BigButton;
