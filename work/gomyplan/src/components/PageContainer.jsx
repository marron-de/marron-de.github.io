import PropTypes from "prop-types";
import styled from "styled-components";

// style
const Container = styled.div`
  position: relative;
  width: 100%;
  min-height: calc(100vh - 120px);
  background: var(--color-bg1);
  flex: 1;
  padding: 0;
  padding-top: 30px;
  display: flex;
  flex-direction: column;
  
  &.LR {
    padding-left: 20px;
    padding-right: 20px;
  }

  &.L {
    padding-left: 20px;
  }

  &.R {
    padding-right: 20px;
  }
`;

const PageContainer = ({ padding, children }) => {
  const className = `container ${padding ? `${padding}` : ""}`;

  return (
    <>
      <Container className={className}>{children}</Container>
    </>
  );
};

PageContainer.propTypes = {
  padding: PropTypes.string,
  children: PropTypes.node,
};

export default PageContainer;
