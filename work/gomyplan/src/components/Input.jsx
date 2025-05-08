import PropTypes from "prop-types";
import { useState } from "react";
import styled, { css } from "styled-components";

// img
import InputWrite from "../assets/img/input_write.png";
import InputWriteActive from "../assets/img/input_write_on.png";
import DarkInputWrite from "../assets/img/dark_input_write.png";
import InputSch from "../assets/img/input_sch.png";
import InputSchActive from "../assets/img/input_sch_on.png";
import DarkInputSch from "../assets/img/dark_input_sch.png";
import InputPwd from "../assets/img/input_eye.png";
import InputPwdActive from "../assets/img/input_eye_on.png";
import DarkInputPwd from "../assets/img/dark_input_eye.png";

// style
const InputBox = styled.div`
  position: relative;
  width: 100%;

  &.active button span:nth-child(1) {
    opacity: 0;
  }

  &.active button span:nth-child(2) {
    opacity: 1;
  }
`;

const InputText = styled.input`
  position: relative;
  border: 1px solid var(--color-border);
  border-radius: 10px;
  width: 100%;
  height: 40px;
  padding: 10px 16px;
  padding-right: calc(16px + 20px + 10px);
  box-shadow: inset 0 0 20px 0 rgba(66, 169, 236, 0.3);
  background: var(--color-input);
  font-weight: 400;
  font-size: 14px;
  line-height: 130%;
  color: var(--color-default);
  transition: var(--transition);

  &::placeholder {
    color: #79a5d8;
  }

  &:focus {
    border: 1px solid var(--color-main);
    color: var(--color-default);
    outline: none;
  }

  ${(props) =>
    props.icon === "date" &&
    css`
      padding-right: 16px;
      padding-left: calc(16px + 20px + 10px);
      text-align: right;
    `}

  .darkMode & {
    border: 1px solid var(--color-point);
    background-color: var(--color-darknavy2);
    color: var(--color-white);
  }

  .darkMode &::placeholder {
    color: #79a5d8;
  }

  .darkMode &:focus {
    border: 1px solid var(--color-main);
    color: var(--color-white);
  }
`;

const InputBtn = styled.div`
  position: absolute;
  right: 16px;
  top: 50%;
  transform: translateY(-50%);
  width: 20px;
  aspect-ratio: 1 / 1;

  span {
    display: block;
    background: no-repeat center / contain;
    width: 100%;
    height: 100%;
    transition: var(--transition);
  }

  span:nth-child(2) {
    position: absolute;
    left: 50%;
    top: 50%;
    transform: translate(-50%, -50%);
    opacity: 0;
  }

  ${InputText}:focus + & {
    span:nth-child(1) {
      opacity: 0;
    }
    span:nth-child(2) {
      opacity: 1;
    }
  }

  ${(props) =>
    props.icon === "write" &&
    css`
      span:nth-child(1) {
        background-image: url(${InputWrite});
      }
      span:nth-child(2) {
        background-image: url(${InputWriteActive});
      }
      .darkMode & span:nth-child(1) {
        background-image: url(${DarkInputWrite});
      }
      .darkMode & span:nth-child(2) {
        background-image: url(${InputWriteActive});
      }
    `}

  ${(props) =>
    props.icon === "search" &&
    css`
      span:nth-child(1) {
        background-image: url(${InputSch});
      }
      span:nth-child(2) {
        background-image: url(${InputSchActive});
      }
      .darkMode & span:nth-child(1) {
        background-image: url(${DarkInputSch});
      }
      .darkMode & span:nth-child(2) {
        background-image: url(${InputSchActive});
      }
    `}

  ${(props) =>
    props.icon === "password" &&
    css`
      span:nth-child(1) {
        background-image: url(${InputPwd});
      }
      span:nth-child(2) {
        background-image: url(${InputPwdActive});
      }
      .darkMode & span:nth-child(1) {
        background-image: url(${DarkInputPwd});
      }
      .darkMode & span:nth-child(2) {
        background-image: url(${InputPwdActive});
      }

      ${InputText}:focus + & {
        span:nth-child(1) {
          opacity: 1;
        }
        span:nth-child(2) {
          opacity: 0;
        }
        &.active span:nth-child(1) {
          opacity: 0;
        }

        &.active span:nth-child(2) {
          opacity: 1;
        }
      }

      &.active span:nth-child(1) {
        opacity: 0;
      }
      &.active span:nth-child(2) {
        opacity: 1;
      }
    `}
`;

const Input = ({ placeholder, type, value, readOnly, icon, onClick, onChange }) => {
  const [isPasswordVisible, setIsPasswordVisible] = useState(false);

  const handleIconClick = () => {
    setIsPasswordVisible(!isPasswordVisible);
  };

  return (
    <InputBox className="inputbox">
      <InputText
        className="input"
        placeholder={placeholder}
        value={value}
        type={isPasswordVisible && icon === "password" ? "text" : type}
        icon={icon}
        readOnly={readOnly}
        onClick={onClick}
        onChange={onChange}
      />
      <InputBtn icon={icon} className={isPasswordVisible && icon === "password" ? "active" : ""} onClick={handleIconClick}>
        <span></span>
        <span></span>
      </InputBtn>
    </InputBox>
  );
};

Input.propTypes = {
  placeholder: PropTypes.string,
  type: PropTypes.string,
  value: PropTypes.oneOfType([PropTypes.string, PropTypes.number]),
  readOnly: PropTypes.bool,
  icon: PropTypes.string,
  onClick: PropTypes.func,
  onChange: PropTypes.func,
};

export default Input;
