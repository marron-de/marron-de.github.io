import PropTypes from "prop-types";
import styled from "styled-components";

// style
const Btnbox = styled.div`
  display: flex;
  flex-direction: column;
  gap: 14px;
  padding: 20px;
  z-index: 10;
  transition: var(--transition);

  &.fixed {
    position: sticky;
    bottom: 60px;
    background: var(--color-bg1);
  }

  .darkMode &.fixed {
    background: var(--color-black);
  }
`;

const PageBtnbox = ({ className, children }) => {
  return (
    <>
      <Btnbox className={className}>{children}</Btnbox>
    </>
  );
};

PageBtnbox.propTypes = {
  className: PropTypes.string,
  children: PropTypes.node,
};

export default PageBtnbox;
