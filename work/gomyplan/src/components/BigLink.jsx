import PropTypes from "prop-types";
import { Link } from "react-router-dom";
import styled from "styled-components";

// style
const Button = styled(Link)`
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

  @media only screen and (max-width: 600px) {
    height: 45px;
    border-radius: 8px;
    background: var(--color-default);
    box-shadow: 0 0 0px 4px rgba(0, 63, 136, 0.2);
    font-size: 16px;
  }
`;

const BigLink = ({ children, to }) => {
  return <Button to={to}>{children}</Button>;
};

BigLink.propTypes = {
  children: PropTypes.node,
  to: PropTypes.string,
};

export default BigLink;
