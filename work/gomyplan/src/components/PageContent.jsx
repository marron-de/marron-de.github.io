import PropTypes from "prop-types";
import styled from "styled-components";

// style
const Content = styled.div`
  flex: 1;
  display:flex;
  flex-direction:column; 

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

const PageContent = ({ padding, children }) => {
  const className = `${padding ? `${padding}` : ""}`;
  return (
    <>
      <Content className={className}>{children}</Content>
    </>
  );
};

PageContent.propTypes = {
  padding: PropTypes.string,
  children: PropTypes.node,
};

export default PageContent;
