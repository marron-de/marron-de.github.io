import PropTypes from "prop-types";
import styled from "styled-components";

// img
import SelectArrow from "../assets/img/select_arrow.png";
import SelectArrowActive from "../assets/img/select_arrow2.png";
import DarkSelectArrow from "../assets/img/dark_select_arrow.png";

// style
const SelectBox = styled.select`
  position: relative;
  border: 1px solid var(--color-border);
  border-radius: 10px !important;
  width: 100%;
  height: 40px;
  padding: 10px 16px;
  padding-right: calc(16px + 20px + 10px);
  box-shadow: inset 0 0 20px 0 rgba(66, 169, 236, 0.3);
  font-weight: 400;
  font-size: 14px;
  line-height: 130%;
  background: url(${SelectArrow}) no-repeat right 16px center/20px var(--color-input);
  appearance: none;
  color: var(--color-default);
  transition: var(--transition);

  ${(props) =>
    !props.$hasValue &&
    `
     color: #79a5d8;
  `}

  &:focus {
    border: 1px solid var(--color-main);
    color: var(--color-default);
    outline: none;
    background-image: url(${SelectArrowActive});
  }

  .darkMode & {
    border: 1px solid var(--color-point);
    background-color: var(--color-darknavy2);
    color: var(--color-white);
    background-image: url(${DarkSelectArrow});

    ${(props) =>
      !props.$hasValue &&
      `
      color: #79a5d8;
    `}
  }

  .darkMode &:focus {
    background-image: url(${SelectArrowActive});
    color: var(--color-white);
  }

  @media screen and (max-width: 320px) {
    padding: 10px 12px;
    padding-right: calc(12px + 18px + 10px);
    background-position: right 12px center;
    background-size: 18px;
  }
`;

const Select = ({ children, value, readOnly, onClick, onChange }) => {
  const hasValue = value !== "";

  return (
    <SelectBox value={value} readOnly={readOnly} onClick={onClick} onChange={onChange} $hasValue={hasValue}>
      {children}
    </SelectBox>
  );
};

Select.propTypes = {
  children: PropTypes.node,
  value: PropTypes.string,
  readOnly: PropTypes.bool,
  onClick: PropTypes.func,
  onChange: PropTypes.func,
};

export default Select;
