import { useState } from "react";
import styled, { css } from "styled-components";

// react-bootstrap
import Modal from "react-bootstrap/Modal";

// react-calendar
import Calendar from "react-calendar";
import "react-calendar/dist/Calendar.css";

// moment
import moment from "moment";

// component
import BigButton from "../components/BigButton";

// img
import InputDate from "../assets/img/input_date.png";
import InputDateActive from "../assets/img/input_date_on.png";
import DarkInputDate from "../assets/img/dark_input_date.png";
import ModalArrow from "../assets/img/modal_arrow.png";

// style
const CalendarContainer = styled.div`
  position: relative;
`;

const DropdownButton = styled.div`
  position: relative;
  width: 100%;
  border: 1px solid var(--color-border);
  border-radius: 10px;
  width: 100%;
  height: 40px;
  padding: 10px 16px;
  box-shadow: inset 0 0 20px 0 rgba(66, 169, 236, 0.3);
  background: var(--color-input);
  font-weight: 400;
  font-size: 14px;
  line-height: 130%;
  color: var(--color-default);
  display: flex;
  justify-content: space-between;
  align-items: center;
  gap: 10px;
  cursor: pointer;
  transition: var(--transition);

  .darkMode & {
    border: 1px solid var(--color-point);
    background: var(--color-darknavy2);
    color: var(--color-white);
  }

  
  .darkMode &:focus {
    border: 1px solid var(--color-main);
  }

  ${(props) =>
    props.$isOpen &&
    css`
      border: 1px solid var(--color-main);
      color: var(--color-default);

      & span:nth-child(1) {
        opacity: 0 !important;
      }

      & span:nth-child(2) {
        opacity: 1 !important;
      }
    `}
`;

const DropdownTxt = styled.span`
  flex: 1;
  text-align: right;
`;

const DropdownImg = styled.div`
  position: relative;
  width: 20px;
  aspect-ratio: 1 / 1;

  span {
    display: block;
    background: no-repeat center / contain;
    width: 100%;
    height: 100%;
    transition: var(--transition);
  }

  span:nth-child(1) {
    background-image: url(${InputDate});
  }
  
  .darkMode & span:nth-child(1) {
    background-image: url(${DarkInputDate});
  }

  span:nth-child(2) {
    position: absolute;
    left: 50%;
    top: 50%;
    transform: translate(-50%, -50%);
    opacity: 0;
    background-image: url(${InputDateActive});
  }
`;

const ModalClose = styled.div`
  background: url(${ModalArrow}) no-repeat center / contain;
  width: 12.8px;
  aspect-ratio: 1 / 0.472813;
  cursor: pointer;
  transition: var(--transition);

  &.collapsed {
    transform: rotate(180deg);
  }

  .darkMode & {
    filter: invert(10);
  }
`;

const CustomCalendar = ()  => {
  const [nowDate, setNowDate] = useState(moment(new Date()).format("YYYY-MM-DD"));
  const [show, setShow] = useState(false);

  const handleClose = () => setShow(false);
  const handleShow = () => setShow(true);

  const handleDateChange = (selectedDate) => {
    setNowDate(moment(selectedDate).format("YYYY-MM-DD"));
    setShow(false);
  };

  return (
    <CalendarContainer>
       <DropdownButton onClick={handleShow} $isOpen={show}>
        <DropdownImg>
          <span></span>
          <span></span>
        </DropdownImg>
        <DropdownTxt>{nowDate}</DropdownTxt>
      </DropdownButton>
      <Modal show={show} onHide={handleClose} className="type1">
        <Modal.Body>
          <ModalClose onClick={handleClose}></ModalClose>
          <Calendar locale="en-US" onChange={handleDateChange} value={new Date(nowDate)} formatDay={(locale, date) => moment(date).format("DD")}></Calendar>
        </Modal.Body>
        <Modal.Footer>
          <BigButton onClick={handleClose}>Book</BigButton>
        </Modal.Footer>
      </Modal>
    </CalendarContainer>
  );
};

export default CustomCalendar;
