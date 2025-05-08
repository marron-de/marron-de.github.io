import PropTypes from "prop-types";
import styled from "styled-components";

// style
const Title = styled.div`
  font-family: var(--second-family);
  font-weight: 600;
  font-size: 16px;
  line-height: 130%;
  color: var(--color-black);
  display: flex;
  align-items: center;
  gap: 6px;
  transition: var(--transition);

  .required {
    font-weight: 400;
    font-size: 14px;
    line-height: 130%;
    color: var(--color-sub2);
  }

  .darkMode & {
    color: var(--color-bg2);
  }
`;

const InputTitle = ({ children }) => {
  return (
    <>
      <Title>{children}</Title>
    </>
  );
};

InputTitle.propTypes = {
  children: PropTypes.node,
};

export default InputTitle;
