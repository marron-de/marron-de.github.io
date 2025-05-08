import { useState } from "react";
import styled from "styled-components";

// react-bootstrap
import Modal from "react-bootstrap/Modal";
import Accordion from "react-bootstrap/Accordion";
import Form from "react-bootstrap/Form";
import InputGroup from "react-bootstrap/InputGroup";

// component
import Header from "../components/Header";
import Footer from "../components/Footer";
import Nav from "../components/Nav";
import PageContainer from "../components/PageContainer";
import PageContent from "../components/PageContent";
import PageBtnbox from "../components/PageBtnbox";
import InputTitle from "../components/InputTitle";
import Input from "../components/Input";
import Select from "../components/Select";
import BigButton from "../components/BigButton";

// style
const ReservationTopBox = styled.div`
  display: flex;
  flex-direction: column;
  gap: 14px;
  border-bottom: 1px solid var(--color-border);
  padding-bottom: 36px;
  margin-bottom: 30px;
  transition: var(--transition);

  .darkMode & {
    border-bottom: 1px solid var(--color-gray);
  }
`;

const ReservationTopTitBox = styled.div`
  display: flex;
  flex-direction: column;
  align-items: flex-start;
  gap: 8px;
`;

const ReservationTitle = styled.p`
  flex: 1;
  font-family: var(--second-family);
  font-weight: 600;
  font-size: 16px;
  line-height: 130%;
  color: var(--color-black);
  transition: var(--transition);

  .darkMode & {
    color: var(--color-bg2);
  }
`;

const ReservationTopContent = styled.div`
  border-radius: 10px;
  padding: 14px;
  box-shadow: 0 4px 15px 0 rgba(0, 74, 123, 0.2);
  background: var(--color-white);
  display: flex;
  flex-direction: column;
  gap: 4px;
  transition: var(--transition);

  .price {
    font-family: var(--second-family);
    font-weight: 700;
    font-size: 18px;
    line-height: 130%;
    color: var(--color-black);
  }

  .desc {
    font-weight: 400;
    font-size: 12px;
    line-height: 130%;
    color: var(--color-gray);
  }

  .time {
    font-weight: 400;
    font-size: 14px;
    line-height: 130%;
    color: var(--color-darkgray);
    margin-top: 20px;
  }

  .darkMode & {
    background: var(--color-darkgray2);
  }

  .darkMode & .price {
    color: var(--color-bg2);
  }

  .darkMode & .desc {
    color: var(--color-gray);
  }

  .darkMode & .time {
    color: var(--color-border);
  }
`;

const ReservationTopContTxt = styled.div`
  display: flex;
  align-items: center;
  gap: 8px;
`;

const ReservationTopContTitle = styled.p`
  width: 80px;
  font-weight: 500;
  font-size: 12px;
  line-height: 130%;
  color: var(--color-default);
  transition: var(--transition);

  .darkMode & {
    color: var(--color-point);
  }
`;

const ReservationTopContDesc = styled.p`
  font-weight: 400;
  font-size: 12px;
  line-height: 130%;
  color: var(--color-darkgray);
  transition: var(--transition);

  .darkMode & {
    color: var(--color-gray);
  }
`;

const ProfileInfoBox = styled.div`
  display: flex;
  flex-direction: column;
  gap: 10px;
  border-bottom: 1px solid var(--color-border);
  padding-bottom: 36px;
  margin-bottom: 30px;
  transition: var(--transition);

  .darkMode & {
    border-bottom: 1px solid var(--color-gray);
  }
`;

const ProfileInfoTitle = styled.div`
  font-family: var(--second-family);
  font-weight: 600;
  font-size: 16px;
  line-height: 130%;
  color: var(--color-black);
  display: flex;
  align-items: center;
  justify-content: space-between;
  gap: 10px;
  transition: var(--transition);

  span {
    flex: 1;
  }

  .darkMode & {
    color: var(--color-bg2);
  }
`;

const ProfileInfoButton = styled.button`
  font-family: var(--second-family);
  font-weight: 600;
  font-size: 12px;
  line-height: 130%;
  text-align: center;
  color: var(--color-input);
  box-shadow: 0 0 0px 2.5px rgba(0, 63, 136, 0.2);
  border-radius: 6px;
  padding: 4px 12px;
  background: var(--color-default);
`;

const ProfileInfoDesc = styled.p`
  font-weight: 400;
  font-size: 12px;
  line-height: 130%;
  color: var(--color-black);
  transition: var(--transition);

  .darkMode & {
    color: var(--color-gray);
  }
`;

const AccordionBox = styled.div`
  border-top: 1px solid var(--color-border);
  padding: 20px 0px 32px;
  margin-top: 5px;

  .accordion {
    display: flex;
    flex-direction: column;
    gap: 14px;
  }

  .accordion-item {
    box-shadow: 0 0 4px 0 rgba(0, 74, 123, 0.4);
    background: var(--color-white);
    border-radius: 10px;
    overflow: hidden;
    transition: var(--transition);
  }

  .accordion-header {
    margin-bottom: 0;
  }

  .accordion-button {
    transition: var(--bs-accordion-transition);
    margin-bottom: 0;
    padding: 0 20px;
    height: 40px;
    color: var(--color-darkgray);
    transition: var(--transition);
  }

  .accordion-button:not(.collapsed) {
    background: var(--color-default);
  }

  .accordion-button:not(.collapsed) div {
    transition: var(--bs-accordion-transition);
    color: var(--color-white);
  }

  .accordion-button:not(.collapsed)::after {
    filter: brightness(10);
  }

  .accordion-collapse {
    border-radius: 0;
  }

  .accordion-body {
    border: none;
    border-radius: 0;
    height: auto;
    padding: 20px 14px 24px;
    display: flex;
    flex-direction: column;
    gap: 20px;
  }

  textarea.form-control {
    box-shadow: inset 0 0 20px 0 rgba(66, 169, 236, 0.3);
    background: var(--color-input);
    border: 1px solid var(--color-border);
    border-radius: 10px;
    padding: 10px 16px;
    min-height: 150px;
    flex: 1;
    font-weight: 400;
    font-size: 12px;
    line-height: 130%;
    color: var(--color-gray);
    transition: var(--transition);
  }

  textarea.form-control::placeholder {
    color: #79a5d8;
  }

  textarea.form-control:focus {
    border: 1px solid var(--color-main);
    color: var(--color-default);
    outline: none;
  }

  .darkMode & .accordion-item {
    background: var(--color-darkgray2);
  }

  .darkMode & .accordion-button,
  .darkMode & .accordion-button * {
    color: var(--color-border);
  }
    
  .darkMode & textarea.form-control{
    border: 1px solid var(--color-point);
    background-color: var(--color-darknavy2);
    color: var(--color-white);
  }

  .darkMode & textarea.form-control::placeholder {
    color: #79a5d8;
  }

  .darkMode & textarea.form-control:focus {
    color: var(--color-white);
  }
`;

const ReservationWrite2 = () => {
  const [email, setEmail] = useState("");
  const [lastName, setLastName] = useState("");
  const [givenName, setGivenName] = useState("");
  const [passportCountry, setPassportCountry] = useState("");
  const [mobileNumber, setMobileNumber] = useState("");
  const [mobileCountry, setMobileCountry] = useState("");

  const isButtonDisabled = () => {
    // 버튼 활성화 여부를 결정
    return email === "" || lastName === "" || givenName === "" || passportCountry === "" || mobileNumber === "" || mobileCountry === "";
  };

  const [show, setShow] = useState(true); // 디폴트 : 모달 표시

  const handleClose = () => setShow(false);
  const handleShow = () => setShow(true);


  return (
    <>
      {/* Header */}
      <Header type="title" title="Reservation" />

      {/* contents */}
      <PageContainer>
        <PageContent padding="LR">
          <ReservationTopBox>
            <ReservationTopTitBox>
              <ReservationTitle>4 Day 3 Night Modern Family Package</ReservationTitle>
            </ReservationTopTitBox>
            <ReservationTopContent>
              <ReservationTopContTxt>
                <ReservationTopContTitle>Arrivl</ReservationTopContTitle>
                <ReservationTopContDesc>2024-06-11</ReservationTopContDesc>
              </ReservationTopContTxt>
              <ReservationTopContTxt>
                <ReservationTopContTitle>Departure</ReservationTopContTitle>
                <ReservationTopContDesc>2024-06-14</ReservationTopContDesc>
              </ReservationTopContTxt>
            </ReservationTopContent>
          </ReservationTopBox>

          <ProfileInfoBox>
            <ProfileInfoTitle>
              <span>Profile Info</span>
              <ProfileInfoButton>Change</ProfileInfoButton>
            </ProfileInfoTitle>
            <ProfileInfoDesc>
              If there is anything we need to inform you of before or during your reservation, we will be contacting you with your provided contact information
              below.
            </ProfileInfoDesc>
          </ProfileInfoBox>

          <Form className="formbox">
            <Form.Group className="formitem">
              <InputTitle className="input_title">Email Address</InputTitle>
              <InputGroup>
                <Input placeholder="Email" type="text" icon="write" value={email} onChange={(e) => setEmail(e.target.value)} />
              </InputGroup>
            </Form.Group>

            <Form.Group className="formitem">
              <InputTitle className="input_title">Passport Last Name</InputTitle>
              <InputGroup>
                <Input placeholder="Last Name" type="text" icon="write" value={lastName} onChange={(e) => setLastName(e.target.value)} />
              </InputGroup>
            </Form.Group>

            <Form.Group className="formitem">
              <InputTitle className="input_title">Passport Given Name</InputTitle>
              <InputGroup>
                <Input placeholder="Given Name" type="text" icon="write" value={givenName} onChange={(e) => setGivenName(e.target.value)} />
              </InputGroup>
            </Form.Group>

            <Form.Group className="formitem">
              <InputTitle className="input_title">Passport Country</InputTitle>
              <InputGroup>
                <Select value={passportCountry} onChange={(e) => setPassportCountry(e.target.value)}>
                  <option value="">Country</option>
                  <option value="KR">Korea</option>
                  <option value="US">United States</option>
                  <option value="JP">Japan</option>
                  <option value="CN">China</option>
                  <option value="FR">France</option>
                  <option value="DE">Germany</option>
                  <option value="GB">United Kingdom</option>
                  <option value="IN">India</option>
                  <option value="BR">Brazil</option>
                  <option value="AU">Australia</option>
                </Select>
              </InputGroup>
            </Form.Group>

            <Form.Group className="formitem">
              <InputTitle className="input_title">Mobile Number</InputTitle>
              <InputGroup>
                <Input placeholder="Number" type="text" icon="write" value={mobileNumber} onChange={(e) => setMobileNumber(e.target.value)} />
              </InputGroup>
            </Form.Group>

            <Form.Group className="formitem">
              <InputTitle className="input_title">Mobile Number Country</InputTitle>
              <InputGroup>
                <Select value={mobileCountry} onChange={(e) => setMobileCountry(e.target.value)}>
                  <option value="">Country</option>
                  <option value="KR">Korea</option>
                  <option value="US">United States</option>
                  <option value="JP">Japan</option>
                  <option value="CN">China</option>
                  <option value="FR">France</option>
                  <option value="DE">Germany</option>
                  <option value="GB">United Kingdom</option>
                  <option value="IN">India</option>
                  <option value="BR">Brazil</option>
                  <option value="AU">Australia</option>
                </Select>
              </InputGroup>
            </Form.Group>
          </Form>

          <AccordionBox>
            <Accordion>
              <Accordion.Item eventKey="0">
                <Accordion.Header>
                  <InputTitle className="input_title">Enter party information</InputTitle>
                </Accordion.Header>
                <Accordion.Body>
                  <Form.Control as="textarea" placeholder="Enter party information..." />
                </Accordion.Body>
              </Accordion.Item>
              <Accordion.Item eventKey="1">
                <Accordion.Header>
                  <InputTitle className="input_title">Enter flight details</InputTitle>
                </Accordion.Header>
                <Accordion.Body>
                  <Form.Control as="textarea" placeholder="Enter flight details..." />
                </Accordion.Body>
              </Accordion.Item>
              <Accordion.Item eventKey="2">
                <Accordion.Header>
                  <InputTitle className="input_title">Special Request</InputTitle>
                </Accordion.Header>
                <Accordion.Body>
                  <Form.Control as="textarea" placeholder="Enter request..." />
                </Accordion.Body>
              </Accordion.Item>
            </Accordion>
          </AccordionBox>
        </PageContent>
        <PageBtnbox>
          <BigButton disabled={isButtonDisabled()} onClick={handleShow}>Checkout</BigButton>
        </PageBtnbox>
      </PageContainer>

      {/* Footer */}
      <Footer />

      {/* Navigation */}
      <Nav />

      {/* Modal */}
      <Modal show={show} onHide={handleClose} className="type2" centered>
        <Modal.Header closeButton></Modal.Header>
        <Modal.Body>
          <p className="title">Reservation complete!</p>
          <p className="desc">You may now return to your account.</p>
        </Modal.Body>
        <Modal.Footer>
          <BigButton onClick={handleClose}>Return</BigButton>
        </Modal.Footer>
      </Modal>
    </>
  );
};

export default ReservationWrite2;
